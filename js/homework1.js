let mass = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15 ];

// console.log(mass[1]*2);

for (let i = 0; i < mass.length; i++) {
    if (mass[i]%2 == 0) {
        console.log(mass[i]*4);
    }
    else {
        console.log(mass[i]/2);
    }
};