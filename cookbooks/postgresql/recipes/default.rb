#
# Cookbook Name:: postgresql
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

package 'postgresql' do
  action :install
end

cookbook_file "wasbook.sql" do
  path "/tmp/wasbook.sql"
  action :create
end

execute 'create db' do
  user    'postgres'
  command 'psql -U postgres wasbook < /tmp/wasbook.sql'
end
