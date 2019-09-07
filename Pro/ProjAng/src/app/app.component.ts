import { Component } from '@angular/core';
import { AuthService } from './auth.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Angular';

  constructor(private _authService: AuthService) { }
  roles: any;

  ngOnInit() {
    this.getRole();
  }

  getRole(){
    this.roles=localStorage.getItem('roles');
    console.log(this.roles);
    return this.roles;
  }


}
