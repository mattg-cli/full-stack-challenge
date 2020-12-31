// A callback function prevents "function-ception" as I like to call it. 
//      Its primary use, in my opinion, is to clean up code for readability for 
//      asynchronous functions. As for a definition, a callback function is
//      a function that is called as a parameter within another function.  


// 2. Give two arrays, a "Working" array and a "Deleted" array, write functions 
//      to add and subtract items from the "working" array while also keeping track 
//      of the "deleted" items in the "Deleted" array.
let working = [];
let deleted = [];

/**
 * @method addToWorking
 * @param {String} text 
 * @description Add a new text item to the 'working' array.
 */
function addToWorking(text) {
     working.push(text);
}

/**
 * @method moveToDelete
 * @param {Number} i (index)
 * @param {String} text 
 * @description Add the text item to the 'deleted' array then remove the same item from
 *                  the 'working' array.
 */
function moveToDelete(i, text) {
     deleted.push(text);
     if (i > -1) {
          working.splice(i, 1);
     }
}

// 3. Write a function to check if two strings are anagrams of one another.
/**
 * @method checkAnagram
 * @param {String} string1
 * @param {String} string2
 * @description Check if two strings are anagrams of one another.
 */
function checkAnagram (string1, string2) {
     let brokenString1 = string1.split('').sort().join('');
     let brokenString2 = string2.split('').sort().join('');
     return brokenString1 === brokenString2;
}

// Explanation: 
//   The split() function will break the string into an array. Next, the sort()
//   function will sort the letters alphabetically. Finally, the join() function
//   will turn the mess of an array back into a string that is then used for 
//   an easy comparison and returning a boolean.