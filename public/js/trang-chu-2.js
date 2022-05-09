// document.getElementById('drop-down').style.display = 'none';
// var state = 0;
// btnDrop = (e) => {
//     var g = document.getElementById('inner-1');
//     var res = '';
//     for (let key in mes[e]) {
//         res += `<div class="drop-box">`;
//         for (let key2 in mes[e][key]) {
//             let f = mes[e][key][key2];
//             res += `<a href="` + f.link + `"` + f.property + `>` + f.content + `</a>`;
//         }
//         res += `</div>`;
//     }
//     g.innerHTML = res;
//     if (document.getElementById('drop-down').style.display === 'none') {
//         document.getElementById('drop-down').style.display = 'block';
//         state = e;
//         console.log(state);
//     } else if (document.getElementById('drop-down').style.display === 'block') {
//         if (state != e) state = e;
//         else if (state == e) {
//             document.getElementById('drop-down').style.display = 'none';
//             state = 0;
//         }
//     }
// }