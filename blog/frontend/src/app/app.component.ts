import { Component, OnInit } from '@angular/core';
import { AppService } from './app.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  providers: [ AppService ]
})
export class AppComponent implements OnInit {
  title = 'Data is feeched using the JSON APIs';
  polls : [any] ;
  errorMessage : string ;
  constructor (private appService: AppService) {}
  
  ngOnInit() { this.getPolls(); }
  
  getPolls() {
    this.appService.getPolls()
                     .subscribe(
                       polls => this.polls = polls,
                       error =>  this.errorMessage = <any>error);
  }
  
}
