String rutaArchivoOrigen = "http://localhost/IA1_final_2023/website/registros.php";
PImage Lapida_,pasto_;
PImage[] img;
int cant_de_imagenes = 6;
int indiceActual = 0 ;

Principal principal;

void setup() {

  size(600,600);
  colorMode(HSB);

  Lapida_=loadImage("data/pata.png");
  pasto_=loadImage("data/cuyo.jpg");
    img = new PImage[cant_de_imagenes];
  for (int i=0; i<cant_de_imagenes; i++ ) {
    img[i] = loadImage("data/color_"+nf(i,4)+".png");
  }
  principal = new Principal();
  

}

void draw(){
  principal.actualizar();
}
