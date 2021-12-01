<!DOCTYPE html>
<html>
  <head lang="en">
  <meta charset="UTF-8">
  <script language="JavaScript">
    function showInput() {
        var item =  document.getElementById("item").value;
        var jumlah = document.getElementById("jumlah").value;
        if (item == 'Electromagnet'){
            document.getElementById('total').innerHTML =  `${jumlah*2} copper`;
        } else if (item=='Electric Motor'){
            document.getElementById('total').innerHTML =  
            `${jumlah*2} silver<br>
            <img src='sf.png' class='gambaritem'><br>
             ${jumlah*2} copper
             `
             ;
             
        }
        
    }
    
  </script>

  </head>
  <style>
  .gambaritem {
      width : 100px;
  }
  </style>
<body>

  <form>
    <label><b>Masukkan Jumlah Item Yang Ingin Dibuat</b></label><br>
    <input type="text" name="message" id="jumlah" required><br>
    <select class="form-control" name="bank" id="item" required>
        <option value=""> Pilih Item</option>
        <option value="Electromagnet">Electromagnet</option>
        <option value="Electric Motor">Electric Motor</option>
    </select>
  </form>

  <input type="submit" onclick="showInput();"><br/>
  <label>Your input: </label>
  <p>
    <span id='total'></span>
  </p>
</body>
</html>
