function showInput() {
    var item = document.getElementById("items").value;
    var jumlah = document.getElementById("totalitem").value;
    if (item == 33) {
        document.getElementById('total').innerHTML =
        `<div class="row featuretext" style='font-size: 20px;'>
            <div class="col"><img src="./assets/items/glowstone.png" class="resultitem"><br>
            ${jumlah*8} Copper Dust</div>
            <div class="col"><img src="./assets/items/ironingot.png" class="resultitem"><br>
            ${jumlah*4} Iron Ingot</div>
            <div class="col"><img src="./assets/items/gunpowder.png" class="resultitem"><br>
            ${jumlah*7} Iron Dust</div>
            <div class="col"><img src="./assets/items/sugar.png" class="resultitem"><br>
            ${jumlah} Aluminum Dust</div>
        </div>
        <div class="row mt-5 featuretext" style='font-size: 20px;'>
            <div class="col"><img src="./assets/items/redstone.png" class="resultitem"><br>
            ${jumlah} Redstone Dust</div>
            <div class="col"><img src="./assets/items/netherrack.png" class="resultitem"><br>
            ${jumlah*32} Netherrack</div>
            <div class="col"><img src="./assets/items/sugar.png" class="resultitem"><br>
            ${jumlah*2} Zinc Dust=</div> 
        </div>`
        ;
    } else if (item == 34) {
        document.getElementById('total').innerHTML =
            `
         `;

    }

}