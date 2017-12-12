require 'mina/bundler'
require 'mina/rails'
require 'mina/git'

account = 'pimms'

set :repository, 'git@gitlab.com:pimms/pimms-web.git'
set :branch, 'master'

set :domain, 'pimms.logomotion.fr'
set :user, 'root'

set :forward_agent, true
set :term_mode, nil

set :deploy_to, "/home/#{account}/src_dev"
set :deploy_to, "/home/#{account}/src_prod" if ENV['on'] == 'prod'

set :shared_dirs, ['vendor', 'web/uploads', 'var/cache', 'var/logs', 'var/jwt']
set :shared_files, ['web/.htaccess', 'web/robots.txt', 'app/config/parameters.yml']

task :deploy => :environment do
	deploy do
		invoke :'git:clone'
		invoke :'deploy:cleanup'
		invoke :'deploy:link_shared_paths'
		on :launch do
			command "export SYMFONY_ENV=prod"
			command "ea-php70 composer.phar install --no-dev --optimize-autoloader"
			command "yarn install --force"
			command "ea-php70 bin/console cache:clear --env=prod --no-debug --no-warmup"
			command "ea-php70 bin/console assets:install --env=prod"
			command "ea-php70 bin/console doctrine:schema:update --force"
			command "./node_modules/.bin/encore production"
			command "find #{fetch(:deploy_to)} -type d -exec chmod 755 {} +"
			command "find #{fetch(:deploy_to)} -type f -exec chmod 644 {} +"
			command "chown -R #{account}:#{account} #{fetch(:deploy_to)}"
		end
	end
end