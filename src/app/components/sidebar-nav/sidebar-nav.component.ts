import { Component, EventEmitter, Input, Output } from '@angular/core';

export interface NavItem {
  id: string;
  label: string;
}

@Component({
  selector: 'app-sidebar-nav',
  standalone: true,
  templateUrl: './sidebar-nav.component.html',
  styleUrl: './sidebar-nav.component.scss',
})
export class SidebarNavComponent {
  @Input({ required: true }) nombre = '';
  @Input({ required: true }) items: NavItem[] = [];
  @Input() activeId = 'inicio';
  @Output() navigate = new EventEmitter<string>();

  onNavigate(sectionId: string, event: Event): void {
    event.preventDefault();
    this.navigate.emit(sectionId);
    const el = document.getElementById(sectionId);
    el?.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}
