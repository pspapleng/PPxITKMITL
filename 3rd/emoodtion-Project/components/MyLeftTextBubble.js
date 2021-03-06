import React from "react";
import { StyleSheet, Text, View } from "react-native";
import Svg, { Path } from "react-native-svg";
import { scale, verticalScale, moderateScale } from "react-native-size-matters";

const MyLeftTextBubble = ({ backgroundColor, textColor, title }) => {
  return (
    <View style={[styles.item, styles.itemIn]}>
      <View style={[styles.balloon, { backgroundColor: backgroundColor }]}>
        <Text
          style={{
            paddingTop: 5,
            color: textColor,
            fontSize: 18,
          }}
        >
          {title}
        </Text>
        <View style={[styles.arrowContainer, styles.arrowLeftContainer]}>
          <Svg
            style={styles.arrowLeft}
            width={moderateScale(15.5, 0.6)}
            height={moderateScale(17.5, 0.6)}
            viewBox="32.484 17.5 15.515 17.5"
            enable-background="new 32.485 17.5 15.515 17.5"
          >
            <Path
              d="M38.484,17.5c0,8.75,1,13.5-6,17.5C51.484,35,52.484,17.5,38.484,17.5z"
              fill={backgroundColor}
              x="0"
              y="0"
            />
          </Svg>
        </View>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  item: {
    marginVertical: moderateScale(7, 2),
    flexDirection: "row",
    justifyContent: "flex-start",
  },
  itemIn: {
    marginLeft: 45,
  },
  itemOut: {
    alignSelf: "flex-end",
    marginRight: 45,
  },
  balloon: {
    maxWidth: moderateScale(250, 2),
    paddingHorizontal: moderateScale(10, 2),
    paddingTop: moderateScale(5, 2),
    paddingBottom: moderateScale(7, 2),
    borderRadius: 20,
  },
  arrowContainer: {
    position: "absolute",
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
    zIndex: -1,
    flex: 1,
  },
  arrowLeftContainer: {
    justifyContent: "flex-end",
    alignItems: "flex-start",
  },
  arrowRightContainer: {
    justifyContent: "flex-end",
    alignItems: "flex-end",
  },
  arrowLeft: {
    left: moderateScale(-6, 0.5),
  },
  arrowRight: {
    right: moderateScale(-6, 0.5),
  },
});

export default MyLeftTextBubble;
