#For example: a program that recognizes car license plates and
# helps in automating fines or arresting criminals, etc.
import numpy as np #pip install numpy
import cv2 as cv #pip install cv2
from matplotlib import pyplot as plt #pip install matplotlib
import imutils #pip install imutils
import easyocr #pip install easyocr --user
#read image
car_img = cv.imread("address of image")
#clean image
car_img_gray = cv.cvtcolor(car_img , cv.COLOR_BGR2GRAY)
#Detection of image edges
blateral_filter = cv.bilateralFilter(car_img_gray , 31 ,11 ,15)
edges = cv.Canny(blateral_filter, 30 , 200)
contours = cv.findContours(edges.copy(), cv.RETR_TREE, cv.CHAIN_APPROX_SIMPLE)
contours = imutils.grab_contours(contours)
contours_sorted = sorted(contours_refined, key=cv.contoursArea , reverse=True)[:4]
for contour in contours_sorted:
    contour_approx = cv.approx = cv.approxPolyDP(contour, 10 , True)
    if len(contour_approx) == 4:
        plate_location = contour_approx
        break
plate_mask0 = np.zeros(car_img_gray.shape , np.uint8)
plate_mask = cv.drawContours(plate_mask0 , [plate_location], 0 ,255 , -1)
plate_img = cv.bitwise_and(car_img,car_img_gray = plate_mask)
#read text of plate
(x,y) = np.where(plate_mask== 255)
(x1 , y1) = (np.min(x), np.min(y))
(x2 , y2) = (np.max(x), np.max(y))
cropped_image = car_img_gray[x1:x2+1 , y1:y2+1]
car_plate_img =cv.imread("address of plate image")
reader = easyocr.Reader(['select your lang'])
plate_info = reader.readtext(car_plate_img)
plate_text = plate_info[0][-2]
print(plate_text)
