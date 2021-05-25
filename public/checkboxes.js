function checkTotal()
{

    document.listform.amount.value="";
    var sum=0;
    var s = "";
    for(i=0;i<document.listform.choice.length;i++)
    {
        if(document.listform.choice[i].checked)
        {
            s=s+(document.listform.choice[i].value)+",";
            $n = document.listform.choice[i].value;                       
            sum=sum+parseInt(document.getElementById($n).textContent);
        }
    }    
    document.listform.sname.value=s;
    document.listform.amount.value=sum;
}



























/*function getSelectedCheckboxValues(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
    let values = [];
    checkboxes.forEach((checkbox) => {
        values.push(checkbox.value);
    });
    return values;
}

const btn = document.querySelector('#btn');
btn.addEventListener('click', (event) => {
   $str= getSelectedCheckboxValues('ok');
   $s1= $str.split(",");
   document.getElementById("ser1").value=$s1; 
});

const btn = document.querySelector('#btn');
btn.addEventListener('click', (event) => {
    document.getElementById("ser1").value=getSelectedCheckboxValues('ok');
});*/