//settings

const courier_cost = 20;

// Get the modal
var modal = document.getElementById("myModal");
var disableModal = document.getElementById("disableModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span_disable = document.getElementById("close_disable_modal");

//openning a modal
const disableModalOpen = () => {
  disableModal.style.display = "block";

};

//openning a modal
const modalOpen = (name, price,restaurant_id) => {
  modal.style.display = "block";

  $("#itemName").val(name);
  $("#restaurant_id").val(restaurant_id);
  $("#orderPrice").val(
    `${price * document.getElementById("orderQuantity").value + courier_cost
    } BDT (${courier_cost} tk added as courier charge)`
  );
  $("#total_cost").val(
    price * document.getElementById("orderQuantity").value + courier_cost
  );
  $("#orderQuantity").on("change", () => {
    $("#orderPrice").val(
      `${price * document.getElementById("orderQuantity").value + courier_cost
      } BDT (${courier_cost} tk added as courier charge)`
    );
    $("#total_cost").val(
      price * document.getElementById("orderQuantity").value + courier_cost
    );
  });
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
  $("#orderQuantity").val(1);
};
span_disable.onclick = function () {
  disableModal.style.display = "none";

};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    $("#orderQuantity").val(1);
  }
  if (event.target == disableModal) {
    disableModal.style.display = "none";
  }
};

showBkashInputField = () => {
  var BkashInputField = document.getElementById("bkashTransID");
  BkashInputField.required = true
  BkashInputField.style.display = "block";

}
hideBkashInputField = () => {
  var BkashInputField = document.getElementById("bkashTransID");
  BkashInputField.required = false
  BkashInputField.style.display = "none";

}

