[![Issues](https://img.shields.io/github/issues/adaliszk/benchmark-php-cli.svg?style=for-the-badge)](https://github.com/adaliszk/benchmark-php-cli/issues)
[![Stars](https://img.shields.io/github/stars/adaliszk/benchmark-php-cli.svg?style=for-the-badge)](https://github.com/adaliszk/benchmark-php-cli/stargazers)
[![Docker Automated build](https://img.shields.io/docker/automated/adaliszk/benchmark-php-cli.svg?style=for-the-badge)](https://hub.docker.com/r/adaliszk/php-cli-benchmark/)
[![MIT License](https://img.shields.io/github/license/adaliszk/benchmark-php-cli.svg?style=for-the-badge)](https://github.com/adaliszk/benchmark-php-cli/LICENSE.md)

# Benchmark: PHP CLI (\w Docker Images)
Just a simple tester to check different php versions and installed modules how's effect the minimal possible script runtime. The test itself really simple, I track the elapsed time with linux `time` command on various scripts in the scripts folder.

## Testing Environments

| Image                                                 | PHPVer   | Extensions                                       | Tag                         |
| ----------------------------------------------------- | -------- | ------------------------------------------------ | --------------------------- |
| [php:5.6-cli-alpine](Dockerfile-56-alpine)            | 5.6.31   | [33](output/php56-alpine-modules)                | `5.6-alpine`                |
| [alpine:3.6+php](Dockerfile-56-alpine-skratch)        | 5.6.31   | [18](output/php56-alpine-skratch-modules)        | `5.6-alpine-skratch`        |
| [php:5.6-cli](Dockerfile-56-debian)                   | 5.6.31   | [34](output/php56-debian-modules)                | `5.6-debian`                |
| [debian:jessie+php](Dockerfile-56-debian-skratch)     | 5.6.30   | [46](output/php56-debian-skratch-modules)        | `5.6-debian-skratch`        |
| [ubuntu:xenial+php](Dockerfile-56-ubuntu)             | 5.6.32   | [34](output/php56-ubuntu-modules)                | `5.6-ubuntu`                |
| [phpearth/php:7.0-cli](Dockerfile-70)                 | 7.0.25   | [39](output/php70-complete-modules)              | `7.0`                       |
| [phpearth/php:7.0](Dockerfile-70-min)                 | 7.0.25   | [12](output/php70-minimal-modules)               | `7.0-min`                   |
| [php:7.0-cli-alpine](Dockerfile-70-alpine)            | 7.0.25   | [32](output/php70-alpine-modules)                | `7.0-alpine`                |
| [alpine:3.5+php](Dockerfile-70-alpine-skratch)        | 7.0.21   | [14](output/php70-alpine-skratch-modules)        | `7.0-alpine-skratch`        |
| [php:7.0-cli](Dockerfile-70-debian)                   | 7.0.25   | [33](output/php70-debian-modules)                | `7.0-debian`                |
| [debian:stretch+php](Dockerfile-70-debian-skratch)    | 7.0.19   | [32](output/php70-debian-skratch-modules)        | `7.0-debian-skratch`        |
| [ubuntu:xenial+php](Dockerfile-70-ubuntu)             | 7.0.25   | [32](output/php70-ubuntu-modules)                | `7.0-ubuntu`                |
| [phpearth/php:7.1-cli](Dockerfile-71)                 | 7.1.11   | [40](output/php71-complete-modules)              | `7.1`                       |
| [phpearth/php:7.1](Dockerfile-71-min)                 | 7.1.11   | [11](output/php71-minimal-modules)               | `7.1-min`                   |
| [php:7.1-cli-alpine](Dockerfile-71-alpine)            | 7.1.10   | [32](output/php71-alpine-modules)                | `7.1-alpine`                |
| [alpine:3.6+php](Dockerfile-71-alpine-skratch)        | 7.1.9    | [10](output/php71-alpine-skratch-modules)        | `7.1-alpine-skratch`        |
| [php:7.1-cli](Dockerfile-71-debian)                   | 7.1.10   | [33](output/php71-debian-modules)                | `7.1-debian`                |
| [debian:sid+php](Dockerfile-71-debian-skratch)        | 7.1.8    | [32](output/php71-debian-skratch-modules)        | `7.1-debian-skratch`        |
| [ubuntu:xenial+php](Dockerfile-71-ubuntu)             | 7.1.11   | [32](output/php71-ubuntu-modules)                | `7.1-ubuntu`                |
| [phpearth/php:7.2-cli](Dockerfile-72)                 | 7.2.0RC5 | [39](output/php72-complete-modules)              | `7.2`                       |
| [phpearth/php:7.2](Dockerfile-72-min)                 | 7.2.0RC5 | [11](output/php72-minimal-modules)               | `7.2-min`                   |
| [php:7.2-rc-cli-alpine](Dockerfile-72-alpine)         | 7.2.0RC5 | [32](output/php72-alpine-modules)                | `7.2-alpine`                |
| [php:7.2-rc-cli](Dockerfile-72-debian)                | 7.2.0RC5 | [32](output/php72-debian-modules)                | `7.2-debian`                |

> Note: The 7.2 is an RC release, multiple images may not perform as it would with a stable release!

## Tests
Later detailed reports will be available, but for now I print an overview result. You can run any of the images with the specified tags by running `docker run adaliszk/php-cli-benchmark:<tagname>`. The image will automaticly run the test and put everyting into the `/out` folder.

### Minimal Echo
The simpliest echo possible with the whole boot-time of the PHP intrepreter.

![Elapsed Time](https://github.com/adaliszk/benchmark-php-cli/blob/master/charts/et_minimal-echo.png?raw=true)  
  
![Process per Second](https://github.com/adaliszk/benchmark-php-cli/blob/master/charts/pps_minimal-echo.png?raw=true)  

