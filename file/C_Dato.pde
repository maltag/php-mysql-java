class Dato {
  String nom, ape, mail , resi, prov_origen,  disci, expos, lugar_expo ;
  color miCol;
  float x,y;
  


  Dato( String nom_, String ape_ , String mail_ , String resi_ , String prov_origen_ , String disci_ , String expos_ , String lugar_expo_ ) {
    resi = resi_;
    prov_origen = prov_origen_;
    disci = disci_;
    expos = expos_;
    lugar_expo = lugar_expo_ ;
    nom = nom_;
    ape = ape_;
    mail = mail_;
  }

  void actualizar() {
   push(); 
  
    textAlign(CENTER, CENTER);
    
    x = random(100,500);
    y = random(100,500);
    imageMode(CENTER);
   
    println(prov_origen);     
    println(disci);
    
    image(img[0],x-30,y+60,30,30);
    
   // image(Lapida_,x,y+30,180,120);
    //fill(0);
    //text( nom, x, y-8);
    //text( ape+":", x, y+4);
    //text("'"+epi+"'", x ,y+22);
    //fill(miCol,255,100);
    //text("¡Son "+flores+"s!", x+2 ,y+35);
    //tint((miCol/100),255,255);
    //image(img[0],x-30,y+60,30,30);
    //image(img[1],x-10,y+60,30,30);
    //image(img[2],x+10,y+60,30,30);
    //image(img[3],x+40,y+60,30,30);
    
    pop();
  }
}
