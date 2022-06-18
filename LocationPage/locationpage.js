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
  var results = document.getElementById("results");
  var states = document.getElementById("states");
  
  for(var i = 0; i < providers.length; i++) {
    var option = document.createElement("option");
    option.text = providers[i].state;
    option.value = providers[i].state;
    states.appendChild(option);
  }
  
  states.onchange = function(e) {
    var selected = this.value
    if (selected !== ""){
      showCompanies(selected);
    } else {
      results.innerHTML = ''
    }
  }
  
  function showCompanies(selected) {
    for (var i = 0; i < providers.length; i++) {
      if (providers[i].state == selected) {
        var companies = providers[i].companies;
        results.innerHTML = "";
        for(var n = 0; n < companies.length; n++){
          var p = document.createElement("p");
          var text = document.createTextNode(companies[n].name);
          p.appendChild(text);
          results.appendChild(p);
        }
      }
    }
  }