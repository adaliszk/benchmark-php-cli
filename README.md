# Benchmark: PHP CLI (Docker Images)
Just a simple test to check different php versions and installed modules how's effect the minimal possible script runtime. The test itself really simple, I track the elapsed time with linux `time` command on various scripts in the scripts folder. My testing machine has a `Intel® Core™ i7-7700K CPU @ 4.20GHz × 8` CPU and `2 × 16GB HyperX RAM @ 2400Mhz` RAM, the storage is a `HiperX SSD` with `M.2` connection.

## Testing Environments

| Image                                                 | PHPVer   | Extensions                                       |
| ----------------------------------------------------- | -------- | ------------------------------------------------ |
| [alpine:3.6+php](Dockerfile-56-alpine-skratch)        | 5.6.31   | [18](output/php56-alpine-skratch-modules)        |
| [php:5.6-cli-alpine](Dockerfile-56-alpine)            | 5.6.31   | [33](output/php56-alpine-modules)                |
| [php:5.6-cli](Dockerfile-56-debian)                   | 5.6.31   | [34](output/php56-debian-modules)                |
| [debian:jessie+php](Dockerfile-56-debian-skratch)     | 5.6.30   | [46](output/php56-debian-skratch-modules)        |
| [ubuntu:xenial+php](Dockerfile-56-ubuntu)             | 5.6.32   | [34](output/php56-ubuntu-modules)                |
| [alpine:3.5+php](Dockerfile-70-alpine-skratch)        | 7.0.21   | [14](output/php70-alpine-skratch-modules)        |
| [php:7.0-cli-alpine](Dockerfile-70-alpine)            | 7.0.25   | [32](output/php70-alpine-modules)                |
| [phpearth/php:7.0](Dockerfile-70-min)                 | 7.0.25   | [12](output/php70-minimal-modules)               |
| [php:7.0-cli](Dockerfile-70-debian)                   | 7.0.25   | [33](output/php70-debian-modules)                |
| [debian:stretch+php](Dockerfile-70-debian-skratch)    | 7.0.19   | [32](output/php70-debian-skratch-modules)        |
| [ubuntu:xenial+php](Dockerfile-70-ubuntu)             | 7.0.25   | [32](output/php70-ubuntu-modules)                |
| [phpearth/php:7.0-cli](Dockerfile-70)                 | 7.0.25   | [39](output/php70-complete-modules)              |
| [php:7.1-cli-alpine](Dockerfile-71-alpine)            | 7.1.10   | [32](output/php71-alpine-modules)                |
| [alpine:3.6+php](Dockerfile-71-alpine-skratch)        | 7.1.9    | [10](output/php71-alpine-skratch-modules)        |
| [phpearth/php:7.1](Dockerfile-71-min)                 | 7.1.11   | [11](output/php71-minimal-modules)               |
| [php:7.1-cli](Dockerfile-71-debian)                   | 7.1.10   | [33](output/php71-debian-modules)                |
| [debian:sid+php](Dockerfile-71-debian-skratch)        | 7.1.8    | [32](output/php71-debian-skratch-modules)        |
| [ubuntu:xenial+php](Dockerfile-71-ubuntu)             | 7.1.11   | [32](output/php71-ubuntu-modules)                |
| [phpearth/php:7.1-cli](Dockerfile-71)                 | 7.1.11   | [40](output/php71-complete-modules)              |
| [phpearth/php:7.2](Dockerfile-72-min)                 | 7.2.0RC5 | [11](output/php72-minimal-modules)               |
| [php:7.2-rc-cli](Dockerfile-72-debian)                | 7.2.0RC5 | [32](output/php72-debian-modules)                |
| [php:7.2-rc-cli-alpine](Dockerfile-72-alpine)         | 7.2.0RC5 | [32](output/php72-alpine-modules)                |
| [phpearth/php:7.2-cli](Dockerfile-72)                 | 7.2.0RC5 | [39](output/php72-complete-modules)              |

> Note: The 7.2 is an RC release, multiple images may not perform as it would with a stable release!

## Tests
Everytime if the [benchmark](bin/benchmark) script runs it will look into the `/srv` and run every php scripts in there. Later I will add more tests and detailed results, but for now here are some charts:

### Minimal Echo
The simpliest echo possible with the whole boot-time of the PHP intrepreter.

![Elapsed Time](https://github.com/adaliszk/benchmark-php-cli/blob/master/charts/et_minimal-echo.png?raw=true)  

![Process per Second](https://github.com/adaliszk/benchmark-php-cli/blob/master/charts/pps_minimal-echo.png?raw=true)  



