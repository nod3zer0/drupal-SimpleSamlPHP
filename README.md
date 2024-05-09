author: René Češka <xceska06@stud.fit.vutbr.cz>
# Drupal - Digital Campus

This is Drupal docker container that was used for demonstration of Drupal for EULiST.
It is modified version of official Drupal docker-compose. This modified version allows use of SimpleSamlPHP as authentication provider.
Docker-compose file is conjunction of two other docker-compose files. These files are available at https://github.com/sameersbn/docker-memcached and https://hub.docker.com/_/drupal. It uses Docker file located in `drupal_memcache/Dockerfile` that modifies official docker image to allow docker to use SimpleSamlPHP.

By default it is configured to connect to EULiST IdP. This wont work unless your metadata are added by EULiST to their IdP.


## Installation

Firstly it is needed to configure SimpleSamlPHP in folder `simplesamlphp` to suit your needs, documentation for SimpleSamlPHP is available at `https://simplesamlphp.org/docs/stable/index.html`. Optionally can be set servername variable in the `sites-enable/000-default.conf` file.
Container can be then run by command `docker-compose up -d`. After that on address `localhost:8080` will be displayed installation dialog of Drupal. Most important part of this dialog is its database configuration. Database type must be set to `PostgreSQL`, database name to `postgres`, database user to `postgres` and password to same password as is in docker-compose.yml. Rest of the configuration is up to user.

After the installation it is needed to add and configure following SimpleSamlPHP plugin (https://www.drupal.org/project/simplesamlphp_auth) according to your IdP.

## SimpleSamlPHP

Web UI is available at `<your.domain>/simplesaml`. Password is `yENGJT3Z9nAefhtBV7dz`.


