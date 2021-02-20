import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RevenuemodelComponent } from './revenuemodel.component';

describe('RevenuemodelComponent', () => {
  let component: RevenuemodelComponent;
  let fixture: ComponentFixture<RevenuemodelComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RevenuemodelComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RevenuemodelComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
