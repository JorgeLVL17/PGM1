import { HttpClient } from '@angular/common/http';
import { Injectable, inject } from '@angular/core';
import { Observable, shareReplay } from 'rxjs';

import { CvData } from '../models/cv.model';

@Injectable({ providedIn: 'root' })
export class CvService {
  private readonly http = inject(HttpClient);
  private readonly cvUrl = 'assets/cv.json';
  private cache$?: Observable<CvData>;

  getCv(): Observable<CvData> {
    if (!this.cache$) {
      this.cache$ = this.http.get<CvData>(this.cvUrl).pipe(shareReplay(1));
    }
    return this.cache$;
  }
}
