FROM node:4.8.3-alpine

WORKDIR /var/www/little-finger

COPY package.json .
RUN npm install --quiet

CMD ["node", "web/app.js"]