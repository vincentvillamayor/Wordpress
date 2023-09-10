FROM node:16-alpine

WORKDIR /WORDPRESS

COPY . /WORDPRESS

RUN npm install

RUN npm run build

EXPOSE 8001

CMD npm run start
