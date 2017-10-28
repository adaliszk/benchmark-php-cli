FROM phpearth/php:7.2-cli
RUN apk add --no-cache bash coreutils

ADD ./bin /opt
ADD ./scripts /srv

RUN chmod 777 /opt && chmod 777 /srv && mkdir /out && chmod 777 /out

CMD ["bash","/opt/benchmark"]
