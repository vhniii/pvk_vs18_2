function openTab(tabIndex) {

    var nodeList = document.querySelectorAll('.tabs .food-category li');

    if (tabIndex == 0) {

        document.getElementById('praed').style.display = "inline-block";
        document.getElementById('praad').classList.add('active');
        document.getElementById('supid').style.display = "none";
        document.getElementById('magustoidud').style.display = "none";
        document.getElementById('joogid').style.display = "none";
        document.getElementById('supp').classList.remove('active');
        document.getElementById('magustoit').classList.remove('active');
        document.getElementById('jook').classList.remove('active');

    }

    if (tabIndex == 1) {

        document.getElementById('supid').style.display = "inline-block";
        document.getElementById('supp').classList.add('active');
        document.getElementById('praed').style.display = "none";
        document.getElementById('magustoidud').style.display = "none";
        document.getElementById('joogid').style.display = "none";
        document.getElementById('praad').classList.remove('active');
        document.getElementById('magustoit').classList.remove('active');
        document.getElementById('jook').classList.remove('active');

    }

    if (tabIndex == 2) {

        document.getElementById('magustoidud').style.display = "inline-block";
        document.getElementById('magustoit').classList.add('active');
        document.getElementById('praed').style.display = "none";
        document.getElementById('supid').style.display = "none";
        document.getElementById('joogid').style.display = "none";
        document.getElementById('praad').classList.remove('active');
        document.getElementById('supp').classList.remove('active');
        document.getElementById('jook').classList.remove('active');

    }

    if (tabIndex == 3) {

        document.getElementById('joogid').style.display = "inline-block";
        document.getElementById('jook').classList.add('active');
        document.getElementById('praed').style.display = "none";
        document.getElementById('magustoidud').style.display = "none";
        document.getElementById('supid').style.display = "none";
        document.getElementById('praad').classList.remove('active');
        document.getElementById('supp').classList.remove('active');
        document.getElementById('magustoit').classList.remove('active');

    }


}