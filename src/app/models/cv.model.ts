export interface RedSocial {
  nombre: string;
  url: string;
  icono: string;
}

export interface Experiencia {
  puesto: string;
  empresa: string;
  periodo: string;
  descripcion: string;
}

export interface Educacion {
  titulo: string;
  institucion: string;
  periodo: string;
}

export interface FotoGaleria {
  id: number;
  titulo: string;
  descripcion: string;
  url: string;
}

export interface CvData {
  nombre: string;
  titulo: string;
  rol: string;
  email: string;
  ubicacion: string;
  resumen: string;
  fotoPerfil: string;
  habilidades: string[];
  experiencia: Experiencia[];
  educacion: Educacion[];
  redes: RedSocial[];
  galeria: FotoGaleria[];
}
