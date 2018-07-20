# FixProductBreadcrumbs
This is a Fix for Magento 2.2.4 and 2.2.5 where the Product Breadcrumbs are generated with JS normally and contain unwanted text

## Installation

Install package by executing **composer require compactcode/fixproductbreadcrumbs**

After installation is complete you need to perform the following commands after that *(within your magento root directory)*:

-php bin/magento cache:clear

-php bin/magento setup:upgrade

-php bin/magento setup:di:compile

-php bin/magento setup:static-content:deploy
