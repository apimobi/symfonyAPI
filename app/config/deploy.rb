logger.level = Logger::MAX_LEVEL

set :application, "API"
# set :domain,      "phb.li"
# set :user,        "ph"
# set :use_sudo,    true
set :deploy_to,   "./www/niaoti/happydays"
set :app_path,    "app"
set :cache_warmup, false
# ssh_options[:port] = 2222
# set :webserver_user,   "www-data"


set :repository,  "https://github.com/apimobi/symfonyAPI.git"
set :scm,         :git

set :model_manager, "doctrine"

role :web,        domain
role :app,        domain, :primary => true

set :use_composer, true
set :keep_releases,  3

set :writable_dirs,       ["var/cache", "var/logs"]
# set :permission_method,   :chown
# set :use_set_permissions, true

# set :shared_files,      ["app/config/parameters.yml"]
