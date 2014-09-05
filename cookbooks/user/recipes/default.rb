#
# Cookbook Name:: user
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

user 'root' do
  password 'root'
  action  :manage
end

%w{ wasbook alice bob carol }.each do |u|
  user u do
    password '$1$ghMwfoPA$g0i3/kU5t9WPXqyAPWZiE/'
    action  [:create, :manage]
    supports :manage_home => true
    home  "/home/#{u}"
  end
end


cookbook_file '/usr/local/sbin/shutdown_now' do
  source 'shutdown_now'
  mode 0750
end

user 'shutdown' do
  password nil
  action  [:create, :manage]
  shell '/usr/local/sbin/shutdown_now'
end

group 'shutdown' do
  action  [:create, :manage]
  gid 1100
  members ['shutdown']
end

execute 'add sudoers' do
  not_if "grep 'shutdown ALL=(ALL) NOPASSWD: /sbin/shutdown' /etc/sudoers"
  command "echo 'shutdown ALL=(ALL) NOPASSWD: /sbin/shutdown' >> /etc/sudoers"
  action :run
end

user 'shutdown' do
  action :manage
  gid 1100
end

group 'www' do
  action [:create, :manage]
  gid 1101
  members ['vagrant']
end

execute 'chgrp www' do
  command 'chgrp -R www /var/www'
  action :run
end

execute 'chmod' do
  command 'chmod 0775 /var/www/html'
  action :run
end
