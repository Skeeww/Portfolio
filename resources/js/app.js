require('./bootstrap');
require('./modal');
require('./stars');
require('./index');

const fitty = require('fitty')
fitty.default('#load', {
    minSize: 12,
    maxSize: 200
})
fitty.default('#envre', {
    minSize: 12,
    maxSize: 200
})
fitty.default('#iremoi', {
    minSize: 12,
    maxSize: 140
})
fitty.default('#cvtxt', {
    minSize: 12,
    maxSize: 180
})