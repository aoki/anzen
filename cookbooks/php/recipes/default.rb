#
# Cookbook Name:: php
# Recipe:: default
#
# Copyright 2014, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

package 'php5' do
  action :install
end

package 'libapache2-mod-php5' do
  action :install
end

