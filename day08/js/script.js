var value = null, type = null;

value=123;
type = typeof value;
console.log(type);

value='123';
type = typeof value;
console.log(type);

value='123 Times Square';
type = typeof value;
console.log(type);

value=12.3;
type = typeof value;
console.log(type);

value=true;
type = typeof value;
console.log(type);

value='true';
type = typeof value;
console.log(type);

value=[1, 2, 3];
type = typeof value;
console.log(type);

value={ foo: 'bar' };
type = typeof value;
console.log(type); 

value=document;
type = typeof value;
console.log(type); 

var message_element = document.getElementById('message');
console.log(message_element);
console.log(typeof message_element);




// 123
// '123 Times Square'
// 12.3
// true
// 'true'
// [1, 2, 3]
// { foo: 'bar' }
// document