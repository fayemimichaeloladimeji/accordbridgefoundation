const https = require('https');

const url = 'https://coderbyte.com/api/challenges/json/age-counting';

https.get(url, (response) => {
  let data = '';

  // Collect the data chunks
  response.on('data', (chunk) => {
    data += chunk;
  });

  // Process the data once fully received
  response.on('end', () => {
    const parsedData = JSON.parse(data);
    const items = parsedData.data.split(', ');

    let count = 0;

    items.forEach(item => {
      const [keyPart, agePart] = item.split(', ');
      const age = parseInt(agePart.split('=')[1]);

      if (age >= 50) {
        count++;
      }
    });

    console.log(`Number of items with age 50 or greater: ${count}`);
  });
}).on('error', (err) => {
  console.error('Error: ' + err.message);
});
