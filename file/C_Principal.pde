class Principal {
  ArrayList<Dato> datos = new ArrayList<Dato>();

  Principal() {
    cargarDatos();
  }

  void cargarDatos() {
    datos = new ArrayList<Dato>();
    String[] result = loadStrings( rutaArchivoOrigen );
    for ( int i=0; i<result.length; i++ ) {
      String[] campos = split( result[i], "," );
        String nom = campos[1];
        String ape = campos[2];
        String mail = campos[3];
        String resi = campos[4];
        String prov_origen = campos[5];
        String disci = campos[6]; 
        String expos = campos[7];
        String lugar_expos = campos[8];
        
                
        datos.add( new Dato( nom, ape, mail , resi, prov_origen, disci, expos, lugar_expos ) );
        
    }


    background(#239B56);
    image(pasto_,0,0,600,600);
    for (int i = 0; i < datos.size(); i++) {
      Dato dato = datos.get(i);
      dato.actualizar();
    }
  }    void actualizar() {
    if ( frameCount%100==0) {
     cargarDatos(); 
    }
  }
}
