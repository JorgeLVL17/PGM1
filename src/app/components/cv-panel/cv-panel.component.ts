import { AsyncPipe } from '@angular/common';
import { Component, inject } from '@angular/core';

import { CvService } from '../../services/cv.service';

@Component({
  selector: 'app-cv-panel',
  standalone: true,
  imports: [AsyncPipe],
  templateUrl: './cv-panel.component.html',
  styleUrl: './cv-panel.component.scss',
})
export class CvPanelComponent {
  protected readonly cv$ = inject(CvService).getCv();
}
