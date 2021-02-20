import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GrowthanalyzerComponent } from './growthanalyzer.component';

describe('GrowthanalyzerComponent', () => {
  let component: GrowthanalyzerComponent;
  let fixture: ComponentFixture<GrowthanalyzerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GrowthanalyzerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GrowthanalyzerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
