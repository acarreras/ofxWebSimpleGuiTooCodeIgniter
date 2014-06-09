#include "testApp.h"

bool fillShape = true;
float sizeX = 100;
float sizeY = 150;

int r = 0;
int g = 0;
int b = 0;

int ifigure = 0;

bool bdrawcenter = false;
int drawcentern = 0;

//--------------------------------------------------------------
void testApp::setup(){
	ofSetVerticalSync(true);
	gui.addSlider("sizeX", sizeX, 50, 800);
	gui.addSlider("sizeY", sizeY, 50, 600);

	gui.addSlider("r", r, 0, 255);
	gui.addSlider("g", g, 0, 255);
	gui.addSlider("b", b, 0, 255);

	gui.addToggle("fillfigure", fillShape);
	gui.addSlider("figure", ifigure, 0, 2);

	gui.addButton("drawcenter", bdrawcenter);

	gui.startServer();
}

//--------------------------------------------------------------
void testApp::update(){

}

//--------------------------------------------------------------
void testApp::draw(){
    // slider effect
	ofSetColor(r, g, b);
	ofSetLineWidth(4);
	ofSetCircleResolution(100);

	// toggle effect
	if(fillShape == true){
        ofFill();
    }
    else if(fillShape == false){
        ofNoFill();
    }

	// radio buttons effect as int
	if(ifigure == 0){
		ofRect((ofGetWidth()-sizeX)/2, (ofGetHeight()-sizeY)/2, sizeX, sizeY);
	}
	else if(ifigure == 1){
		ofCircle(ofGetWidth()/2, ofGetHeight()/2, sizeX);
	}
	else if(ifigure == 2){
		ofEllipse(ofGetWidth()*0.5, ofGetHeight()*0.5, sizeX, sizeY);
	}

	// button effect
	if(bdrawcenter){
        ofFill();
        ofSetColor(255);
        ofCircle(ofGetWidth()/2, ofGetHeight()/2, 10);
        drawcentern++;
        if(drawcentern > 100){
            bdrawcenter = false;
            drawcentern = 0;
        }
	}

	gui.draw();
}

//--------------------------------------------------------------
void testApp::keyPressed  (int key){
}

//--------------------------------------------------------------
void testApp::keyReleased  (int key){

}

//--------------------------------------------------------------
void testApp::mouseMoved(int x, int y ){

}

//--------------------------------------------------------------
void testApp::mouseDragged(int x, int y, int button){
}

//--------------------------------------------------------------
void testApp::mousePressed(int x, int y, int button){

}

//--------------------------------------------------------------
void testApp::mouseReleased(){

}
