
let id = $("input[name*='id']")
id.attr("readonly","readonly");

//What happens when you click the edit button
$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let fname = $("input[name*='Firstname']");
    let lname = $("input[name*='Lastname']");
    let height = $("input[name*='Height']");
    let address = $("input[name*='Location']");

   id.val(textvalues[0]);
    fname.val(textvalues[1]);
    lname.val(textvalues[2]);
    height.val(textvalues[3]);
    address.val(textvalues[4]);
});

//function to display data on the input boxes
function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}