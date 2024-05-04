String archivo = "artistas_registros.csv";
Table tabla;
int index;
float ancho , alto;
float celdasX , celdasY;

void setup(){
  size(1000,1000);
  background(255);
  
  tabla = loadTable("artistas_registros.csv","header");
  celdasX = 9;
  celdasY = 7;
  ancho= width /celdasX;
  alto = height /celdasY;
  
  
  for(TableRow row : tabla.rows()){
    String id_usuario = row.getString("id_usuario");
    String nombre = row.getString("nombre");
    String apellido = row.getString("apellido");
    String email = row.getString("email");
    String residencia = row.getString("residencia");
    String provincia_origen = row.getString("provincia_origen");
    String disciplina = row.getString("disciplina");
    String exposiciones = row.getString("exposiciones");
    String lugar_exposiciones = row.getString("lugar_exposiciones");
    
    float i = index / celdasY;
    float j = index / celdasX;
    
    float xpos = i*ancho;
    float ypos = j*alto;
    
    rect(xpos, ypos, ancho, alto) ;
    index++;
  }


}


void draw(){
}
