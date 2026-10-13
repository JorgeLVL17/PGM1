import { AsyncPipe } from '@angular/common';
import { Component, HostListener, inject, signal } from '@angular/core';

import { SidebarNavComponent, NavItem } from '../../components/sidebar-nav/sidebar-nav.component';
import { CvPanelComponent } from '../../components/cv-panel/cv-panel.component';
import { PhotoGalleryComponent } from '../../components/photo-gallery/photo-gallery.component';
import { CvService } from '../../services/cv.service';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [AsyncPipe, SidebarNavComponent, CvPanelComponent, PhotoGalleryComponent],
  templateUrl: './home.component.html',
  styleUrl: './home.component.scss',
})
export class HomeComponent {
  private readonly cvService = inject(CvService);
  protected readonly cv$ = this.cvService.getCv();

  protected readonly navItems: NavItem[] = [
    { id: 'inicio', label: 'Inicio' },
    { id: 'sobre-mi', label: 'Sobre mí' },
    { id: 'galeria', label: 'Galería' },
    { id: 'experiencia', label: 'Experiencia' },
    { id: 'educacion', label: 'Educación' },
    { id: 'contacto', label: 'Contacto' },
  ];

  protected activeSection = signal('inicio');
  protected mobileNavOpen = signal(false);

  @HostListener('window:scroll')
  onScroll(): void {
    const offset = 120;
    for (const item of [...this.navItems].reverse()) {
      const el = document.getElementById(item.id);
      if (el && el.getBoundingClientRect().top - offset <= 0) {
        this.activeSection.set(item.id);
        return;
      }
    }
    this.activeSection.set('inicio');
  }

  onNavigate(sectionId: string): void {
    this.activeSection.set(sectionId);
    this.mobileNavOpen.set(false);
  }

  toggleMobileNav(): void {
    this.mobileNavOpen.update((open) => !open);
  }
}
