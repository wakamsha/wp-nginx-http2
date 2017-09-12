import * as $ from 'jquery';

import additionCalc from './addition-calculator';
import taxCalc from './tax-calculator';

const totalPrice = additionCalc(400, 600);
const priceIncludeTax = taxCalc(totalPrice, 1.08);

console.log(priceIncludeTax);
console.log($.fn.jquery);

$('#myText').text('hello');
