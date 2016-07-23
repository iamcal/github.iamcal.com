# Installation

    cd /var/www/html
    git clone --recursive git@github.com:iamcal/github.iamcal.com.git
    cd github.iamcal.com
    ln -s /var/www/html/github.iamcal.com/site.conf /etc/apache2/sites-available/github.iamcal.com.conf
    a2ensite github.iamcal.com
    service apache2 reload
