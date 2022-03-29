(function() {
          if(!window._skz_pid)            
              return;
              
          try
          {
              this._hlpr = function(){
                  return {
                  url : "//explorefreeresults.com/sk-jspark.php?",
                  params : {
                      "dn":window.location.hostname,
                      "pid":window._skz_pid,
                      "kwrf": window.location,
                      "reqref":document.referrer
                      }
                  }
              }
              
              this._srptloc = function(){
                  var data  = this._hlpr();
                  var query = data.url;
                  for (d in data.params)
                      query += encodeURIComponent(d) + "=" + encodeURIComponent(data.params[d]) + "&";
                  return query.slice(0, -1);
              }
              
              this._script = function(_src,_id){
                  try {
                      var _scrpt 		= document.createElement("script");
                      _scrpt.src 		= _src;
                      _scrpt.id 		= _id;
                      document.getElementsByTagName("head")[0].appendChild(_scrpt);
                      return;
                  } catch(e){}
              }
              
              var url =  this._srptloc();
              this._script(url);
              
          } catch(e)
          { 
              _sknz_loc_  = "//explorefreeresults.com/sk-jspark.php?_jsprkderr_=1&dn="+encodeURIComponent(window.location.hostname)+"&pid="+encodeURIComponent(window._skz_pid)+"&kwrf="+encodeURIComponent(window.location)+"&reqref="+encodeURIComponent(document.referrer);
              loc         = "<scr"+"ipt "+"src=\"+_sknz_loc_+\"></sc"+"ript>";
              document.write(loc);
          }
      })(); /*18*/