import { AsyncPipe } from '@angular/common';
import { Component, inject, signal } from '@angular/core';

import { FotoGaleria } from '../../models/cv.model';
import { CvService } from '../../services/cv.service';

@Component({
  selector: 'app-photo-gallery',
  standalone: true,
  imports: [AsyncPipe],
  templateUrl: './photo-gallery.component.html',
  styleUrl: './photo-gallery.component.scss',
})
export class PhotoGalleryComponent {
  protected readonly cv$ = inject(CvService).getCv();
  protected readonly selected = signal<FotoGaleria | null>(null);

  open(foto: FotoGaleria): void {
    this.selected.set(foto);
  }

  close(): void {
    this.selected.set(null);
  }
}
