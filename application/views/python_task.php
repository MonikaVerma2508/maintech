def sumNum(num):
    print("Printing current and previous number sum in a given range " + str(num))
    previousNum = 0
    for i in range(num):
        sum = previousNum + i
        print("Current Number", i, "Previous Number ", previousNum," Sum: ", sum)
        previousNum = i

Num = int(input("Enter your value: "))
sumNum(Num)

===============
def Reverse(lst):
    lst.reverse()
    return lst
      
lst = [10, 11, 12, 13, 14, 15]
print(Reverse(lst))

============================
test_list = [ 1, 4, 5, 7, 8 ,9]
# Printing test_list
print ("The list is : " + str(test_list))
  
 
counter = 0
for i in test_list:
      
    # incrementing counter
    counter = counter + 1
  
 
print ("Length of list using naive method is : " + str(counter))