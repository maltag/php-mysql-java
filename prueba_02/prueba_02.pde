String archivo = "artistas_registros.csv";
String[] datos;
int[] nombre = new int [7];
int[] apellido = new int [7];

void setup(){
  archivo = loadStrings(archivo);
  for(int i=1; i<datos.length;i++){
    String[] columna = split(datos[i], ",");
    nombre[i-1] = int(columna[1]);
    apellido[i-1] = int(columna[2]);
    
  }
  printArray(nombre);
  
}
