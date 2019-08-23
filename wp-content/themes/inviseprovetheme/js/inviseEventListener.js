



/**
 *
 * Created by IntelliJ IDEA.
 * User: Ayettey
 * Date: 5/27/2019
 * Time: 2:51 PM
 *  Global element
 * @type {NodeListOf<Element>}
 */

let tab_content=document.querySelectorAll(".tab-content");


/**
 *  inviseprov tabs function is called whenever a user click a Tab for queries, toggle actions are perform on the tabs
 *  using a switch statement.
 *  The toDo, tabContentOne, tabContentTwo, tabContentThree are used to manipulate String or insertion
 *  window.addEventListener sets up a function that will be called whenever the web browser and event is delivered.
 *
 * @type {{toDo, tabContentOne, tabContentTwo, tabContentThree, window.addEventListener, tabs}}
 */
window.addEventListener('load', function() {
    tab_content[0].innerHTML=tabContentOne();
    let  test_description=document.querySelectorAll(".test-description");

    test_description[0].innerHTML=toDo()+" "+tabContentOne();
});



function tabs(event) {

    let  elements=document.querySelectorAll(".tabs");


          elements.forEach(function (value) {
              value.style.cssText="background:white; color:black";
              tab_content[0].innerHTML=tabContentOne();


         switch (event.textContent) {
             case "TABB 1": event.style.cssText="background:black; color:white";
                tab_content[0].innerHTML=tabContentOne();


             break;
             case "TABB 2":event.style.cssText="background:black; color:white";
                 tab_content[0].innerHTML=tabContentTwo();
                 break;
             case "TABB 3":event.style.cssText="background:black; color:white";
                 tab_content[0].innerHTML=tabContentThree();
             break;
             default:console.log("Tabb is undefined");

         }

          });
 }

 function tabContentOne() {
    return `normcore pinterest hot chicken banjo plaid woke letterpress enamel pin post-ironic la croix chia. TABB 
        "3 TABB 2 TABB 1 Ramps selvage food truck, four dollar toast farm-to-table organic disrupt cray shabby chic
        " letter- press plaid bespoke fashion axe neutra. Single-origin coffee iceland gochujang tacos. 
        "Yuccer try-hard keytar, chartreuse single-origin coffee sriracha pork belly gochujang tumeric paleo
        "unicorn. Readymade quinoa cred drinking vinegar, cronut la croix irony chia af typewriter. Ramps selvage
        " food truck, four dollar toast farm-to-table organic disrupt cray shabby chic letterpress plaid bespoke 
        "fashion axe neutra. Single-origin coffee iceland gochujang taco.`;

}

function toDo() {

    return `<span id='to-do-bold'>Invise Din uppgift är att koda enligt detta i WordPress, det är inte viktigt 
        "att designen följer exakt utan det viktga är att elementen i denna design finns med. Tabbarna löser du 
        "på det sätt som du tycker är bäst, så länge dessa går att återanvända på flera sidor.</span>`;

}
function tabContentTwo() {
    return`Hashtag thundercats before they sold out celiac ramps, coloring 
        "book everyday carry yr bespoke. Readymade fingerstache live-edge microdosing. 
        "Sartorial kombucha street art williamsburg, biodiesel vaporware ethical. Marfa hell
        " of mikshk, asymmetrical normcore pinterest hot chicken banjo plaid woke letterpress 
        " enamel pin post-ironic la croix chia. TABB 3 TABB 2 TABB 1 Ramps seivage food truck, 
        "four dollar toast farm-to table organic disrupt cray shabby chic letter- press plaid 
        "bespoke fashion axe neutra. Single orgin coffee iceland gochujang tacos. Yuccie try 
        "hard keytar, chartreuse single-orgin coffee sriracha pork bely gochujang tumeric paleo.`;

}

function tabContentThree() {
    return`Hashtag thundercats before they sold out celiac ramps, coloring 
        "book everyday carry yr bespoke. Readymade fingerstache live-edge microdosing. 
        "Sartorial kombucha street art williamsburg, biodiesel vaporware ethical. Marfa hell
        " of mikshk, asymmetrical normcore pinterest hot chicken banjo plaid woke letterpress
        " enamel pin post-ironic la croix chia. TABB 3 TABB 2 TABB 1 Ramps seivage food truck, 
        "four dollar toast farm-to table organic disrupt cray shabby chic letter- press plaid 
        "bespoke fashion axe neutra. Single orgin coffee iceland gochujang tacos. Yuccie try 
        "hard keytar, chartreuse single-orgin coffee sriracha pork bely gochujang tumeric paleo.`;

}