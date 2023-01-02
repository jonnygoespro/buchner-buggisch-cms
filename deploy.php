<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/jonnygoespro/buchner-buggisch-cms.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);

// Hosts

host('193.170.119.198')
    ->set('remote_user', 'aaron')
    ->set('port','5412')
    ->set('deploy_path', '~/ben');

// Hooks

// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);


after('deploy:failed', 'deploy:unlock');

