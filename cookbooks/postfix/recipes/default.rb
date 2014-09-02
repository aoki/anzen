#
# Cookbook Name:: postfix
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

package 'postfix' do
  action :install
end

cookbook_file '/etc/postfix/main.cf' do
  source 'main.cf'
  mode 0644
end
