String s = "Algo que va aca";
String [] words;

void setup(){
  size (600,600);
  background(0);
  words = split (s, " ");
}

void draw(){
for(int i=0; i< words.length; i++){
  fill(255,127);
  stroke(255);
  text(words[i], 50+i*200, 200);
}
}
