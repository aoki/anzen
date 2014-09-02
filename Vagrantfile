# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "hnakamur/ubuntu-14.04-x64"
  config.vm.network :private_network, ip: "192.168.34.101"
  config.vm.usable_port_range = (7000..7100)

  config.vm.provision :chef_solo do |chef|
    config.omnibus.chef_version = :latest   # require vagrant plugin (vagrant plugin install vagrant-omnibus)
    chef.log_level = "debug"
    chef.cookbooks_path = "cookbooks"
    chef.add_recipe "apache"
    chef.add_recipe "php"
    chef.add_recipe "postgresql"
    chef.add_recipe "postfix"
    chef.add_recipe "dovecot"
    chef.add_recipe "user"
  end
end
