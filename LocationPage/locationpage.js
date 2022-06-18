var providersJSON = {"providers": [
    {
      "state": "WASHINGTON",
      "companies":[
        {"name": "Bremerton's Homestyle Deli"},
   {"name": "Seattle's Homestyle Deli"},
   {"name": "Olympia's Homestyle Deli"}
      ]
    },
    {
      "state": "CALIFORNIA",
      "companies":[
        {"name": "Los Angeles's Homestyle Deli"},
   {"name": "San Francisco's Homestyle Deli"},
        {"name": "San Diego's Homestyle Deli"}
      ]
    },
    {
      "state": "OREGON",
      "companies":[
        {"name": "Portland's Homestyle Deli"},
        {"name": "Salem's Homestyle Deli"},
   {"name": "Eugene's Homestyle Deli"}
      ]
    }
   
  ]};
  
  var providers = providersJSON.providers;
  
  console.log(providers[2].companies[1].name);
  
  //--------------------------//
  var div = document.getElementById("container");
  var option0 = document.createElement("option");
  option0.text = "";
  option0.value = "";
  var states = document.getElementById("states");
  states.appendChild(option0);
  
  
  for(var i = 0; i < providers.length; i++) {
    var option = document.createElement("option");
    option.text = providers[i].state;
    option.value = providers[i].state;
    states.appendChild(option);
  }
  
  states.onchange = function(e) {
    e.preventDefault();
    var selected = this.value
    if (selected !== ""){
      showCompanies(selected);
    } else {
      console.log("Back to square one.")
    }
  }
  
  function showCompanies(selected) {
    for (var i = 0; i < providers.length; i++) {
      if (providers[i].state == selected) {
        var companies = providers[i].companies;
        div.innerHTML = "";
        for(var n = 0; n < companies.length; n++){
          var p = document.createElement("p");
          var text = document.createTextNode(companies[n].name);
          p.appendChild(text);
          div.appendChild(p);
        }
      }
    }
  }