#!/bin/bash
ln -s /var/www/html/github.iamcal.com/site.conf /etc/apache2/sites-available/github.iamcal.com.conf
a2ensite github.iamcal.com
service apache2 reload
